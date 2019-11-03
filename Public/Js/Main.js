$(document).ready(function () {
    
    $('#frmRegistroUsuarios').on('submit',prepararFormulario);
    $('#frmLoginUsuarios').on('submit',prepararLogin);

    function prepararLogin(e){
        e.preventDefault();
        let correoOUsuario = document.querySelector('#txtUsuarioCorreo').value,
        password = document.querySelector('#txtPasswordSesion').value;

        if(correoOUsuario.trim() === '' || password.trim()===''){
            alert('campos obligatorios')
        } else {
            iniciarSesion();
        }
    }
    function iniciarSesion(){
        $.ajax({
            type: "POST",
            url: "App/Controllers/PersonaController.php",
            data: $('#frmLoginUsuarios').serialize()+'&accion=consultar',
            dataType: "JSON",
        })
        .done(function(response){
            console.log(response)
            if(response.Respuesta==='Correcto' && response.idUsuario==='1'){
                location.href = 'admin.php';
            }
            if(response.Respuesta==='Correcto' && response.idUsuario==='2') {
                location.href = 'cliente.php';
            }
            if(response.Error==='No existe'){
                $('#alerta').removeClass('d-none');
            }
            if(response.Error==='Contraseña incorrecta'){
                $('#alerta').removeClass('d-none');
            }
        })
        .fail(function(response){
            console.log(response)
        })
    }
    function prepararFormulario(e){
        e.preventDefault();
        let txtNombre = document.querySelector('#txtNombreCompl').value,
        txtApellido = document.querySelector('#txtApellidoCompl').value,
        txtCorreo = document.querySelector('#txtCorreoCompl').value,
        txtNombreUsuario = document.querySelector('#txtNombreUsuario').value,
        txtPassword = document.querySelector('#txtContraseñaCompl').value;

        if(txtNombre.trim() === ''||txtApellido.trim() === ''||txtCorreo.trim() === ''||
        txtNombreUsuario.trim() === ''||txtPassword.trim() === ''){
            alert('campos obligatorios')
        } else {
            insertarUsuario();
        }
        
        

    }
    function insertarUsuario(){
        $.ajax({
            type: "POST",
            url: "App/Controllers/PersonaController.php",
            data: $('#frmRegistroUsuarios').serialize()+'&accion=insertar',
            dataType: "JSON"
        })
        .done(function(response){
           
        })
        .fail(function(response){
           
        })
    }




});