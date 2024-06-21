// Receber seletor do campo valor
let inputValor = document.getElementById('valor');
// Aguardar o usuário digitar valor no campo
inputValor.addEventListener('input', function(){
    //remover caracteres
    let valueValor = this.value.replace(/[^\d]/g, '');

    //Adicionar separador de milhar
    var valorFormatado =  (valueValor.slice(0, -2).replace(/\B(?=(\d{3})+(?!\d))/g, '.')) + '' + valueValor.slice(-2);

    //Adicionar virgula no centavo
    valorFormatado = valorFormatado.slice(0, -2) + ',' + valorFormatado.slice(-2);

    //Atualizar no campo
    this.value = valorFormatado;

});

function confirmarExclusao(event, idConta){
    event.preventDefault();

    Swal.fire({
        title: "Tem certeza?",
        text: "Você não poderá reverter isso",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Sim, excluir!"
      }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('formExcluir'+idConta).submit();
        }
      });
}