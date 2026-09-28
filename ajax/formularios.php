<?php
    // Carrega configurações, sessão, classes e dependências.
    include('../config.php');
    // Resultado que será devolvido ao JavaScript em formato JSON.
    $data = array();
    // Define o assunto padrão das mensagens recebidas.
    $assunto = 'Nova Mensagem do site!';
    // Aqui será montado o corpo do e-mail com os campos enviados.
    $corpo = '';
    // Percorre todos os campos enviados pelo formulário.
    foreach ($_POST as $key => $value) {
        $corpo .= ucfirst($key) . ": " . $value;
        $corpo .= "<hr>";
    }
    // Agrupa as informações usadas pela classe Email.
    $info = array('assunto' => $assunto, 'corpo' => $corpo);
    // Cria o objeto responsável pelo envio via SMTP.
    $mail = new Email('smtp.gmail.com', 'maiquel.correa12@gmail.com', 'lkcc eekp ahic rgzb', 'maiquelAna');
    // Define o destinatário da mensagem.
    $mail->addAddress('maiquel.quinho@gmail.com', 'maiquel conta secundaria');
    // Passa assunto e conteúdo para o PHPMailer.
    $mail->formatarEmail($info);
    // Tenta enviar o e-mail e informa o resultado ao JavaScript.
    if ($mail->enviarEmail()) {
        $data['sucesso'] = true;
    } else {
        $data['erro'] = true;
    }
    
    

    // Encerra a execução e devolve o resultado como JSON.
    die(json_encode($data));
    
?>