<?php
/**
 * Função que valida o que há entra o prefixo e a extensão do arquivo de imagem
 * Para se verificar se é uma modificação de tamanho do nome original
 * Previne de pegar arquivos que tem nomes iguais e foram acrescentados
 **/

function validatePattern($string) {
    $pattern = '/^-[1-9]\d{0,4}x[1-9]\d{0,4}$/';
    return preg_match($pattern, $string);
}
