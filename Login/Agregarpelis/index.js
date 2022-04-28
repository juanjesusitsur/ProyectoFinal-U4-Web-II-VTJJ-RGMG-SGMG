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
            <strong>${$form.titulo.value}</strong> ${data}
        `)
    }
    $btnAdd.addEventListener("click", (event) => {
        if($form.titulo.value != "" && $form.descripcion.value != ""){
            let index = addJsonElement({
                titulo: $form.titulo.value,
                descripcion: $form.descripcion.value
            })
            const $div = document.createElement("div")
            $div.classList.add("notification", "is-link", "is-light", "py-2", "my-1")
            $div.innerHTML = templateElement(`${$form.descripcion.value}`, index)

            $divElements.insertBefore($div, $divElements.firstChild)

            $form.reset()
        }else{
            alert("Complete los campos")
        }
    })

    $btnSave.addEventListener("click", (event) =>{
        //parameters = parameters.filter(el => el != null)
        //const $jsonDiv = document.getElementById("jsonDiv")
        //$jsonDiv.innerHTML = `JSON: ${JSON.stringify(parameters)}`
        //$divElements.innerHTML = ""
        //parameters = []

        alert("Titulo guardado exitosamente!")
        

    })
})()