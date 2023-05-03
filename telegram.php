$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$number = $_POST['user_number'];
$token = "5812658156:AAFGnvyGW63zVHTJnvLN6Yo7151O0i-YqhA";
$chat_id = "-901479213";
$arr = array(
  'Ім'я користувача: ' => $name,
  'Телефон:' => $phone,
  'Розмір: ' => $number
); 

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."<b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sandMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
if ($sendToTelegram) {
    header('Location: C:\Downloaded Web Sites\Бізнес сайт кроси\Сайт кроси\berets.com.ua\Товари\Кайот.html')
    return true;
} else (
    echo "Error"
)