<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class Email extends Controller
{
    public function sendEmail()
    {
        if ($this->request->isAJAX()) {
            // รับข้อมูลจาก AJAX
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $subject = $this->request->getPost('subject');
            $message = $this->request->getPost('message');
            $recaptchaResponse = $this->request->getPost('g-recaptcha-response');

            // ตรวจสอบ reCAPTCHA
            $secretKey = '6LfqdVsqAAAAADzzhrME0w6MRTy-JtfNE9KBOL4V';
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
            $responseKeys = json_decode($response, true);

            if (intval($responseKeys["success"]) !== 1) {
                return $this->response->setJSON(['error' => 'การตรวจสอบ reCAPTCHA ล้มเหลว.']);
            }
            
            // โหลดบริการอีเมล
            $emailService = Services::email();

            // ตั้งค่าการเชื่อมต่อกับ SMTP ของ Gmail
            $emailService->initialize([
                'protocol' => 'smtp',
                'SMTPHost' => 'smtp.gmail.com',
                'SMTPUser' => 'easter.5gg@gmail.com', // อีเมลผู้ส่ง
                'SMTPPass' => 'pfau loqy noqz moco', // รหัสผ่านผู้ส่ง (ใช้รหัสผ่านแอป)
                'SMTPPort' => 587,
                'mailType' => 'text',
                'charset' => 'utf-8',
                'wordWrap' => true,
                'SMTPCrypto' => 'tls',
            ]);

            // ตั้งค่าผู้ส่งและผู้รับ
            $emailService->setFrom($email, $name);
            $emailService->setTo('easter.5gg@gmail.com'); // เปลี่ยนเป็นอีเมลผู้รับ

            // หัวข้อและเนื้อหาอีเมล
            $emailService->setSubject("$subject");
            $emailService->setMessage("ชื่อ: $name\nอีเมล: $email\nเบอร์ติดต่อกลับ: $phone\nข้อความ: $message");

            // ส่งอีเมล
            if ($emailService->send()) {
                return $this->response->setJSON(['success' => 'Your message has been sent to us.']);
            } else {
                // แสดงข้อความข้อผิดพลาดที่เกิดขึ้น
                return $this->response->setJSON(['error' => 'There was an error sending your message.']);
            }            
        }
    }
}