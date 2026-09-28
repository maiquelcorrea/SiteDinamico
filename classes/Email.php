<?php

use PHPMailer\PHPMailer\PHPMailer;



// Classe responsável por configurar e enviar e-mails usando o PHPMailer.
class Email{

    // Guarda o objeto do PHPMailer utilizado no envio.
    private $mailer;

    // Configura o servidor SMTP, segurança e remetente.
    public function __construct ($host, $username, $password, $nome) {
        // Cria uma nova instância do PHPMailer.
        $this->mailer = new PHPMailer;

        // Configurações do servidor SMTP.
        // Define que o envio será realizado via SMTP.
        $this->mailer->isSMTP();
        $this->mailer->Host = $host; /* smtp.gmail.com */
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $username; /* maiquel.correa12@gmail.com */
        $this->mailer->Password = $password; /* lkcc eekp ahic rgzb */
        // Usa criptografia STARTTLS na conexão.
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;
        $this->mailer->CharSet = 'UTF-8';

        // Define o remetente que aparecerá no e-mail.
        $this->mailer->setFrom($username,$nome);
        // Permite enviar o corpo do e-mail usando HTML.
        $this->mailer->isHTML(true); 
    }

    // Adiciona um destinatário ao e-mail.
    public function addAddress($email,$nome){
        $this->mailer->addAddress($email, $nome);
    }

    // Define assunto, corpo HTML e versão em texto simples.
    public function formatarEmail($info){
        $this->mailer->Subject = $info['assunto'];
        $this->mailer->Body = $info['corpo'];
        $this->mailer->AltBody = strip_tags($info['corpo']); 
    }

    // Tenta enviar a mensagem e informa se o envio funcionou.
    public function enviarEmail(){
        if($this->mailer->send()){
            return true;
        } else {
            return false;
        }
    }
}

?>