<?php
$ldaphost = "ldaps://bancounion.com.bo";  
$ldapport = 636;                        

$ldapconn = ldap_connect($ldaphost, $ldapport)
          or die("No se pudo conectar al servidor LDAP.");

if ($ldapconn) {
    $ldapbind = ldap_bind($ldapconn, $_POST['usuario'], $_POST['password']);

    if ($ldapbind) {
        header("location:inicio.html");
    } else {
        include("index.html");
        echo " class='bad'>UPSSS!!!! ERROR DE AUTENTIFICACION";
    }
}
?>