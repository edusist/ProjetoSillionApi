
function carregarUsuarios(pagina = 1) {
    fetch(`/usuarios?page=${pagina}`)
        .then(response => response.json())
        .then(data => {
            console.log('Usuários paginados:', data.data);
            // Aqui você pode renderizar os dados no DOM
        })
        .catch(error => {
            console.error('Erro ao carregar usuários:', error);
        });
}

// function request(){
//      var headers = {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }

// fetch('/usuarios?page=2')
//   .then(response => response.json())
//   .then(data => {
//     console.log(data); // Aqui estão os usuários paginados

//   });
// }




//   window.addEventListener("load", carregarUsuarios);
