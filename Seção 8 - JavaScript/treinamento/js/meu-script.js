alert('Olá, seja bem vido ao curso!!!')


// ************ Prescedência de execução ************ 
// o header é executado primeiro que o body, 'nome' está em body, portando 
// gerará erro de prescedência, pois 'nome' ainda não existe na página
/*
	selecionar um elemento no DOM
	atualizar o valor desse elemento com uma string
*/
document.getElementById('nome').value = 'Oi'

// ************ Cometários ************ 
// comentário de uma linha
/*
   comentário de múltiplas linhas
*/

// ************ Utilizar ou não ; no final dos comandos ************ 
console.log(true)
console.log(true);