function Saludar()
{
    var nombre;
    var txtNombre;

//    nombre = document.getElementById("nombre").value;
    txtNombre = document.getElementById("nombre");

    var txtSaludo = document.getElementById("saludo");


    alert("su nombre es: " + txtNombre.value);
    txtSaludo.value = txtNombre.value;


}