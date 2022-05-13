let parameters = []
function removeElement(event, position) {
    event.target.parentElement.remove()
    delete parameters[position]
}

const addJsonElement = json => {
    parameters.push(json)
    return parameters.length - 1
}

(function load(){
    const $form = document.getElementById("frmPelis")
    const $divElements = document.getElementById("divElements")
    const $btnSave = document.getElementById("btnSave")
    const $btnAdd = document.getElementById("btnAdd")

    const templateElement = (data, position) => {
        return (`
            <button class="delete" onclick="removeElement(event, ${position})"></button>
            <strong>Titulo: ${$form.titulo.value}</strong><br> ${data}
        `)
    }

    $btnAdd.addEventListener("click", (event) => {
        if($form.titulo.value == "" && $form.descripcion.value == "" && $form.horario.value == "" && $form.imegen.value == ""){
            /*let index = addJsonElement({
                titulo: $form.titulo.value,
                descripcion: $form.descripcion.value,
                horarios: $form.horario.value,
                imegen: $form.imegen.value
            })
            /*$.post('Cartelera Cine ADMPelis JJVT_MGSG_MGRG/BD/GuadarDatos.php',{tit:$form.titulo.value,descp:$form.descripcion.value,fec:$form.horario.value,img:$form.imegen.value},
            function(data){
                if(data!=null){
                    alert("Los datos se mandoran correctamente a la pagina php")
                }else{
                    alert("Los datos son incorrectos")
                }
            })
            const $div = document.createElement("div")
            $div.classList.add("notification", "is-link", "is-light", "py-2", "my-1")
            $div.innerHTML = templateElement(`<strong>Sinopsis:</strong><br>${$form.descripcion.value}<br><strong>Horario:</strong><br> ${$form.horario.value}<br><img src="${$form.imegen.value}"><br>`, index)

            $divElements.insertBefore($div, $divElements.firstChild)
            
        
            $form.reset()
            $.post('BD/GuadarDatos.php',{tit:$form.titulo.value,descp:$form.descripcion.value,fec:$form.horario.value,img:$form.imegen.value})
        }else{*/
            alert("Complete los campos")
        }
    })

    $btnSave.addEventListener("click", (event) =>{
        //parameters = parameters.filter(el => el != null)
        //const $jsonDiv = document.getElementById("jsonDiv")
        //$jsonDiv.innerHTML = `JSON: ${JSON.stringify(parameters)}`
        //$divElements.innerHTML = ""
        //parameters = []
        /*if($form.titulo.value != "" && $form.descripcion.value != "" && $form.horario.value != "" && $form.imegen.value != ""){
            let index = addJsonElement({
                titulo: $form.titulo.value,
                descripcion: $form.descripcion.value,
                horarios: $form.horario.value,
                imegen: $form.imegen.value
            })
            $.post('Cartelera Cine ADMPelis JJVT_MGSG_MGRG/BD/GuadarDatos.php',{tit:$form.titulo.value,descp:$form.descripcion.value,fec:$form.horario.value,img:$form.imegen.value},
            function(data){
                if(data!=null){
                    alert("Los datos se mandoran correctamente a la pagina php")
                }else{
                    alert("Los datos son incorrectos")
                }
            })*/
        if($form.titulo.value != "" && $form.descripcion.value != "" && $form.horario.value != ""){
           //alert("",window.location.assign(url="BD/PeliculasDaos.php"))
        }else{
            alert("Compete los campos" )
        }
        /*}else{
            alert("Complete los campos")
        }*/
    })
})()