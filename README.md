# Sistema Banco FIEC Proyecto Final
Sistema Bancario realizado en PHP & MySQL.

INSTRUCCIONES DE CONFIGURACION
Este proyecto se divide en tres partes jerárquicas: La página de índice para el inicio de sesión del cliente. 
Una página de inicio de sesión de personal oculta. 
Una página de inicio de sesión de administrador oculta. 
Uso: 
1.Instalar XAMPP o algo similar. 
2. Copie todos los archivos a c: / xampp / htdocs / banking /
3.Cree un db denominado como 'bnak_db' e importe el bank_db.sql desde phpMyAdmin.
4.Cambie la contraseña en el archivo _inc / dbconn.php en consecuencia.
5.visitar localhost / bancario (página de índice de clientes)
6.visit localhost / banking / adminlogin.php (inicio de sesión de administrador)
7.visit localhost / banking / staff_login.php (inicio de sesión del personal)
Nota: Las contraseñas de los clientes se incluyen y almacenan en la base de datos. 
No podrás verlo. 
La contraseña es "imprudente" para casi todos los clientes, en caso de que desee iniciar sesión con el cliente agregado previamente.

--------------------------------------------------------------------
DESCRICPION DEL PROYECTO
Sistema bancario en línea Sistema bancario en línea en PHP y MySQL.

Un sistema bancario en línea basado en web robusto y efectivo. Ampliando la funcionalidad sin comprometer la seguridad. Servicios bancarios personales que le dan control total sobre todas sus demandas bancarias en línea. Interfaz de usuario simple y fácil para trabajar. Características de la banca en línea: Registro para la banca en línea por el administrador. Agregando cuenta de Beneficiario por cliente. Transferencia del importe al beneficiario añadido por el cliente. El personal debe aprobar la activación del beneficiario antes de que pueda utilizarse para transferir fondos. 

El cliente conoce su última fecha y hora de inicio de sesión cada vez que inicia sesión. El cliente puede verificar las últimas 10 transacciones realizadas con su cuenta. El cliente puede verificar su estado de cuenta dentro de un rango de fechas. El cliente puede solicitar cajeros automáticos y chequera. 

El personal aprobará las solicitudes de tarjeta de cajero automático y chequera. El administrador puede agregar / editar / eliminar al cliente, así como al personal. Los tres (cliente, personal y administrador) pueden cambiar su contraseña. Las páginas de inicio de sesión del personal y de administración están ocultas al cliente por motivos de seguridad. Seguridad: Todas y cada una de las entradas se pasan a través de mysql_real_escape_string () para eliminar caracteres especiales de la cadena para que el usuario no pueda enviar entradas arbitrarias. Protege de ataques como Sql Injection y Cross Site Scripting (XSS).
Las contraseñas están cifradas con SHA- 1 algoritmo hash y luego almacenado en la base de datos. Las contraseñas se almacenan como hashes cifrados con un salt aleatorio adicional para mayor seguridad. Nota: Si hablamos de seguridad, los puntos mencionados anteriormente no brindarán ninguna seguridad pero funcionará para los principiantes.

Al estar dentro del pentesting de aplicaciones web, sé muy bien que este proyecto no se considerará seguro. Necesita al menos un mecanismo de filtrado más efectivo, un mejor algoritmo de hash, un mejor procedimiento de almacenamiento de sal para almacenar contraseñas y algunas otras cosas también. Base de datos: La base de datos contiene tablas de clientes, personal y administración. 

Cada cliente tiene su propia libreta virtual vinculada con su número de cuenta. El personal, el cliente y el administrador tienen sus detalles y contraseña en sus respectivas tablas con todos los detalles. Una tabla separada para el beneficiario se incluye en la base de datos. Se incluye una mesa para cheques y solicitudes de cajero automático.

