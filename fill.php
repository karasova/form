<?php 
    error_reporting(0);
    $errors = [];

    if (!empty($_POST)){
        if (empty($_POST['check'])){
            $check = 'off';
        }
        else 
            $check = $_POST['check'];

        if (!empty($_POST['lastname'])){
            $lastname = $_POST['lastname'];
        }
        else 
            $errors ['lastname'] = 'Не заполнено поле с фамилией!';

        if (!empty($_POST['firstname'])){
            $firstname = $_POST['firstname'];
        }
        else 
            $errors ['firstname'] = 'Не заполнено поле с именем!';

        if (!empty($_POST['email'])){
            $email = $_POST['email'];
        }
        else 
            $errors ['email'] = 'Не введен адрес электронной почты!';
    

        if (!empty($_POST['phone'])){
            $phone = $_POST['phone'];
        }
        else 
            $errors ['phone'] = 'Не введен номер телефона!';


        if (empty($errors)){
            $contents = '<?php' . "\n" 
            . 'return' 
            . var_export([ 
            'lastname' => $lastname, 
            'firstname' => $firstname, 
            'email' => $email, 
            'phone' => $phone, 
            'theme' => $_POST['theme'], 
            'pay' => $_POST['pay'], 
            'check' => $check, 
            ], true);

            $filename = date('Y-m-d-H-i-s') . '-' . rand(010, 99) . '.txt'; 
            file_put_contents("formfiles//".$filename, $contents);  

            header('Location: success.php');
            exit;
    
        }   
    } 
    
    
    
