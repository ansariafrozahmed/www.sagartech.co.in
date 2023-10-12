  if (isset($_POST['name'])) {
      // echo "hello";
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['msg'];
      $name=$_POST['name'];

$subject = "Enquiry from ".$name;
$mailFrom="s.danish0827@gmail.com";
$headers="From:mail.sagartech.co.in";//info@sagartech.co.in
$to="$mailFrom";
$txt="Name: $name
\nEmail: $email
\nPhone: $phone
\nMsg: $message";

if(mail($to, $subject, $txt, "https://sagartech.co.in/"))    //https://sagartech.co.in/
{
   echo "1";

}
else
{
  echo "0";

} 
}?>