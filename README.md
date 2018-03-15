# G1-05
Practica DSS


**OBJETIVOS:**
    
    El objetivo de este proyecto es el desarrollar un programa de gestión de datos,
    archivos y horarios para la ONG ADACEA.
    La empresa actualmente registra actividades de un paciente a mano y no tiene
    la posibilidad de obtener automáticamente unas métricas. Gracias a esto todos
    los usuarios podrán observar la evolución del paciente de forma sencilla y sin
    necesidad de papeleo. También les interesa grabar las sesiones y poder
    reproducirlas en la aplicación. Además de esto, necesitan que el programa pueda
    realizar la gestión de horarios de los usuarios mostrando las actividades que van
    a realizar y los pacientes que van a participar, esto es para evitar solapes en los
    horarios.
    Además, sería interesante que los usuarios pudiesen comentar los gráficos o los
    resultados de los pacientes para que compartan ideas sobre los resultados. Y,
    por otro lado, se puede implementar un ranking de las actividades más usadas
    por los usuarios para cierto tipo de paciente. También tendrán la posibilidad de
    proponer una actividad y si dicha actividad es votada por x usuarios se
    implementará en la empresa.



**DESCRIPCIÓN**
    
    Aplicación de gestión (intranet)
    La aplicación de gestión interna se podrá acceder mediante un usuario y
    contraseña por el cual se podrán realizar estas gestiones:
    - Gestión para controlar su perfil de usuario.
    - Gestión para añadir actividades a los pacientes.
    - Gestión para grabar sesiones.
    - Gestión de horarios.
    - Gestión para dar de alta a pacientes.
    - Gestión para puntuar actividades.
    - Gestión para proponer actividad
    El usuario podrá acceder a cada una de estas gestiones ayudado por una
    interfaz web que le facilite consultar y controlar el estado de las actividades de
    sus pacientes y de los pacientes de los otros usuarios (solo consulta). Además,
    esta interfaz albergara una sección donde las puntuaciones serán
    representadas mediante graficas con distintas métricas para ayudar a que el
    usuario no tenga que recurrir a distintos medios para su verificación.
    La aplicación no contará con una web pública.
**PÚBLICO OBJETIVO**
      
      La aplicación solo será gestionada internamente por ello va dirigida a los
      trabajadores de la ONG ADECEA que trabajan con pacientes como puede ser
      un neuropsicólogo, terapeuta ocupacional, monitor, logopeda, fisioterapeuta,
      trabajador social y auxiliar.
    
 **COMO EJECUTAR EL PROGRAMA**
  
       Accedemos a la carpeta llamada Proyecto dentro del repositorio y ejecutamos el script init.sh con el comando ./init.sh o
       sh init.sh (Solo probado en ubuntu). En caso de dar error, quitar la primera linea del init.sh.
       Para cargar las migraciones php artisan migrate y php artisan db:seed para cargar los seeders.
       Adems para pasar las pruebas unitarias se debe utilizar el siguiente comando: "vendor/bin/phpunit".
       
 
