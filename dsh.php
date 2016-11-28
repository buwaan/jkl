<? php
include( 'Net/SSH2.php' );
$username = $_GET ['djani'
$password = $_GET ['2'
$email = $_GET [ 'irvan.tijani@gmail.com' ];
$ssh = new Net_SSH2 ('127.0.
if (! $ssh -> login('root' , 'p
exit( 'Login Failed' );
}
echo $ssh -> exec('useradd -p
?>
