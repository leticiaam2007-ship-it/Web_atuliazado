console.log("Hello");
let a = 10;
console.log(a);
console.log(typeof (a));
a = "dez"
console.log(a);
console.log(typeof (a));
a = true
console.log(a);
console.log(typeof (a));
a = 5;
console.log(a + "0");
console.log("0" + a);
console.log(typeof (a));
const pi = 3.141516 //o que é o pi 
//pi = 2;  TypeError: Assignment to constant variable. significa que não pode dar um valor para uma variavel constante sempre vai dar erro//
let contador = 0 //ponto e virgula nao é obrigatorio mais precisa quebrar linha para colocar o proximo comando caso nao coloque ponto
//e virgula
contador++
console.log(contador)

for (contador = 0; contador < 10; contador++) {
    console.log(contador)
}