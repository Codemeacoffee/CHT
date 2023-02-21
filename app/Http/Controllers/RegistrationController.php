<?php


namespace CHT\Http\Controllers;


use CHT\Applicants;
use CHT\Course;
use CHT\PreRegistration;
use CHT\Students;
use Illuminate\Support\Facades\Mail;

class RegistrationController
{

    function index(){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $mailList = [['maria.perez@fuerteventura2000.com', 'Maria Pérez'], ['info@chtcanarias.com', 'Info CHT'],
            ['rrss@chtcanarias.com', 'RRSS CHTCanarias']];
        $course = $_POST['course'];

        $student = Students::where('email', $email)->first();

        if(!$student){
            Students::create([
                'name'=>$name,
                'email'=>$email,
                'telefono'=>$tel
            ]);
        }else{
            $student->name = $name;
            $student->telefono = $tel;
            $student->save();
        }

        $registration = PreRegistration::where('id_course', $course)
            ->where('email', $email)
            ->first();

        if(!$registration){
            PreRegistration::create([
                'id_course'=>$course,
                'email'=>$email
            ]);
        }

        $course = Course::where('id', $course)->first();

        foreach($mailList as $emailData){

            $data = [
                "name" => $name,
                "email" => $email,
                "phone" => $tel,
                "course" => $course,
                "receiver" => $emailData[0],
                "receiverAlias" => $emailData[1]
            ];

            Mail::send('emails.preinscription', $data, function($message) use ($data) {
                $message->to($data['receiver'], $data['receiverAlias'])->subject('Preinscripción CHT');
                $message->from('noreply@chtcanarias.com', 'CHT');
            });
        }

        return redirect()->back()->with('message', 'Gracias por matricularte en el curso ' . $course['name'] . ' Nivel ' . $course['level']);
    }

    function validate(){
        $email = htmlspecialchars($_GET['email']);
        $course = $_GET['course'];
        $preRegistration = PreRegistration::where([['id_course', $course], ['email', $email]])->get();
        return $preRegistration;
    }

    function team(){
        $name = htmlspecialchars($_POST['fullName']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tlf']);
        $puesto = htmlspecialchars($_POST['position']);
        $cv = htmlspecialchars($_FILES['cv']['tmp_name']);

        $cvName = $_FILES['cv']['name'];
        $ext = strtolower(substr($cvName, strripos($cvName, '.')+1));
        $encryptedName = hash('sha256', $cvName) . '.' . $ext;
        $temp = $cv;
        move_uploaded_file( "$temp" , "files/$encryptedName");

        $applicant = Applicants::where('email', $email)->first();

        if(!$applicant){
            Applicants::create([
                'name'=>$name,
                'email'=>$email,
                'telefono'=>$tel,
                'puesto'=>$puesto,
                'routeCV'=>"files/$encryptedName"
            ]);
        }else{
            $applicant->name = $name;
            $applicant->telefono = $tel;
            $applicant->puesto = $puesto;
            $applicant->routeCV = "files/$encryptedName";
            $applicant->save();
        }

        $data = [
            "name" => $name,
            "email" => $email,
            "phone" => $tel,
            "occupation" => $puesto,
            "pathToFile" => "files/$encryptedName"
        ];

        Mail::send('emails.applicant', $data, function($message) use ($data) {
            $message->to('enviatucvcanarias@gmail.com', 'CurriculumsCanarias')->subject('Solicitud de trabajo');
            $message->from('noreply@chtcanarias.com', 'CHT');
            $message->attach($data['pathToFile'],
                [
                    'as' => $data['name']."CV",
                    'mime' => 'application/pdf'
                ]);
        });

        return redirect()->back()->with('message', '¡Gracias por unirte a nuestro proceso de selección!');
    }

    function store(){
        $data = [
            "name" => htmlspecialchars($_POST['name']),
            "email" => htmlspecialchars($_POST['email']),
            "phone" => htmlspecialchars($_POST['tel'])
        ];

        Mail::send('emails.presupuestoSala', $data, function($message) use ($data) {
            $message->to('info@chtcanarias.com', 'InfoCHT')->subject('Presupuesto de salas');
            $message->from('noreply@chtcanarias.com', 'CHT');
        });

        Mail::send('emails.presupuestoSala', $data, function($message) use ($data) {
            $message->to('maria.perez@fuerteventura2000.com', 'Maria Perez')->subject('Presupuesto de salas CHT');
            $message->from('noreply@chtcanarias.com', 'CHT');
        });
        return redirect()->back()->with('message', 'En breve te contactaremos con más información sobre nuestras salas disponibles actualmente.');
    }
    
    function competences(){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $isle = htmlspecialchars($_POST['isle']);
        $mailList = [['maria.perez@fuerteventura2000.com', 'Maria Pérez'], ['info@chtcanarias.com', 'Info CHT'],
            ['rrss@chtcanarias.com', 'RRSS CHTCanarias']];
        // $mailList = [['franciscorsua95@gmail.com', 'Fran']];
        $competence = $_POST['competence'];
        
        if($isle == 'grancanaria'){
            $isle = 'Gran Canaria';
        }

        $student = Students::where('email', $email)->first();

        if(!$student){
            Students::create([
                'name'=>$name,
                'email'=>$email,
                'telefono'=>$tel
            ]);
        }else{
            $student->name = $name;
            $student->telefono = $tel;
            $student->save();
        }

        foreach($mailList as $emailData){

            $data = [
                "name" => $name,
                "email" => $email,
                "phone" => $tel,
                "isle" => $isle,
                "competence" => $competence,
                "receiver" => $emailData[0],
                "receiverAlias" => $emailData[1]
            ];

            Mail::send('emails.inscription', $data, function($message) use ($data) {
                $message->to($data['receiver'], $data['receiverAlias'])->subject('Inscripción Oxford Test CHT');
                $message->from('noreply@chtcanarias.com', 'CHT');
            });
        }

        return redirect()->back()->with('message', 'Gracias por inscribirte en ' .$competence . ' ');
    }
}