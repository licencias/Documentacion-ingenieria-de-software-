## Inyección SQL

### Código
'''php
"SELECT * FROM Alumno WHERE rut = '" . $rut . "'"
'''
## Normal

### URL con amor
/navegadorcito_v2/query_v1.php?rut=12345678

### Consulta SQL resultante
"SELECT * FROM Alumno WHERE rut = '12345678'"

## Maldad

### URL con maldad
/navegadorcito_v2/query_v1.php?rut=12345678%27OR%20%271=1

### Consulta SQL resultante
"SELECT * FROM Alumno WHERE rut = '12345678\'OR \'1=1"

## Explicación
De cierta forma desarma el ataque agregando carácteres que convierten la consulta SQL en una 
inválida.