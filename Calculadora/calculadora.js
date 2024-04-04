function suma(num1, num2){
    return num1 + num2;
}

function resta(num1, num2){
    return num1 - num2;
}
function multiplicacion(num1, num2){
    return num1 * num2;
}
function division(num1, num2){
    if (num1 == 0){
        num1="infinito"
        return num1;
    }
    else if(num2 == 0){
        num2="infinito"
        return num2;
    }
    else{
        return num1 / num2;
    }
}

