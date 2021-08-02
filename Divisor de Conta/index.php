<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="style.css">
   
    <title>Divisor de Contas PHP</title>

    <style>
        
    </style>
</head>
<body>

        
     <center><b><font color="white" style = "font-size:80px">Divisor de Contas</font></b></center>
     <hr size = 5 color="white">

<div>
   
    <table class = "style1">

        <tr>
            
            <td>
              <form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">

              <table class = "style1">

                <tr>
                    <td> Nome:</td>
                    <td><input type="text" name = "firstname" placeholder="Insira o nome"  style="width:200px;"></td>
                    </tr>



                    <tr>
                        <td> Sobrenome:</td>
                        <td><input type="text" name = "surname" placeholder="Insira o sobrenome"  style="width:200px;"></td>
                        </tr>



                    <tr>
                        <td> Data de Aniversário(Opcional):</td>
                        <td><input type="date" = "birthdate" placeholder="Opcional"  style="width:200px;" style="width:200px;"></td>
                        </tr>


            
                        <tr>
                            <td> Gênero:</td>
                        <td>
                            <input type="radio" name="genero" value="m">Masculino
                            <input type="radio" name="genero" value="f">Feminino
                            <input type="radio" name="genero" value="nd">Não Definido
                        </td>
                            </tr>



                        <tr>
                           <td> Telefone:</td>
                           <td><input type="text" name = "telephone" placeholder="(DDD) 9xxxx-xxxx"  style="width:200px;"></td>
                           </tr>



                        <tr>
                           <td> E-mail:</td>
                           <td><input type="text" name = "email" placeholder="e-mail@address.com"  style="width:200px;"></td>
                           </tr>



                        <tr>
                            <td> Endereço:</td>
                            <td><textarea cols="26"></textarea></td>
                            </tr>



                        <tr>
                             <td> Cidade:</td>
                             <td><input type="text" name = "city" placeholder="Ex: Paracambi - RJ"  style="width:200px;"></td>
                        </tr>        


                        <tr>
                             <td> Bairro:</td>
                             <td><input type="text" name = "borough" placeholder="Digite o bairro em que reside"  style="width:200px;"></td>
                             </tr>   
                                
                                
                        <tr>
                             <td> CEP:</td>
                             <td><input type="text" name = "postcode" placeholder="Digite o código postal xxxxx-xxx"  style="width:200px;"></td>
                             </tr>    



                             <tr>
                                <td style="width: 250px">&nbsp;</td><td align="left" style="width:400px">
                                <input type="reset" name="reset" value="Reset" class="btn">
                                </td>
                                </tr>    

                    </table>

                    <!--====================================================================================================================-->






                    <td>
                        <table class="style1" width="700px">

                            <tr>
                                <td>&nbsp;</td>
                                <td><b><u>Faça um pedido!</u></b></td>
                            </tr>

                            <tr>
                                <td>Hamburguer_(R$7.00):</td>
                                <td>
                                    <input type="text" name="bmeal" style="width: 200px" value="<?php if (isset($_POST['bmeal'])) { echo $_POST["bmeal"] * 7; } else { echo 0;} ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Fritas_(R$4.00):</td>
                                <td>
                                    <input type="text" name="fries" style="width: 200px" value="<?php if (isset($_POST['fries'])) { echo ($_POST['fries'] * 4); } else { echo 0;} ?>">
                                </td>
                            </tr>

                            <tr>
                            <td>X-Tudo_(R$5.00):</td>
                            <td>
                                <input type="text" name="xtudo" style="width: 200px" value="<?php if (isset($_POST['xtudo'])) { echo ($_POST['xtudo'] * 5); } else { echo 0;} ?>">
                            </td>
                        </tr>

                        <tr>
                        <td>Lasanha_(R$11.00):</td>
                        <td>
                            <input type="text" name="lasagna" style="width: 200px" value="<?php if (isset($_POST['lasagna'])) { echo ($_POST['lasagna'] * 11); } else { echo 0;} ?>">
                        </td>
                       </tr>



                       <tr>
                        <td>Mc Cheese_(R$8.00):</td>
                        <td>
                            <input type="text" name="mccheese" style="width: 200px" value="<?php if (isset($_POST['mccheese'])) { echo ($_POST['mccheese'] * 8); } else { echo 0;} ?>">
                        </td>
                       </tr>              


                       <tr>
                        <td>Bebidas_(R$2.00):</td>
                        <td>
                            <input type="text" name="drinks" style="width: 200px" value="<?php if (isset($_POST['drinks'])) { echo ($_POST['drinks'] * 2); } else { echo 0;} ?>">
                        </td>
                       </tr>


                       <tr>
                           <td>&nbsp;</td>
                           <td style="width:480px"><b><u> Custo Total: </u></b></td>
                       </tr>

 <!--====================================================================================================================-->


<tr>
    <td>Taxa: </td>

    <td>
        <input type="text" name="tax" style="width:200px"  
        value="<?php
        if (isset($_POST['bmeal']) && isset($_POST['fries']) && isset($_POST['xtudo']) && isset($_POST['lasagna']) && isset($_POST['mccheese']) && isset($_POST['drinks'])) {
            echo ((($_POST['bmeal'] * 5) +
                  ($_POST['fries'] * 4) +
                  ($_POST['xtudo'] * 7) +
                  ($_POST['lasagna'] * 11) +
                  ($_POST['mccheese'] * 8) +
                  ($_POST['drinks'] * 2)) * 0.12);
        } else { echo ''; }
        ?>">
        
       
    </td>
</tr>

<tr>
    <td>Subtotal: </td>

    <td>
        <input type="text" name="subtotal" style="width:200px"  
        value="<?php
        if (isset($_POST['bmeal']) &&
            isset($_POST['fries']) &&
            isset($_POST['xtudo']) &&
            isset($_POST['lasagna']) &&
            isset($_POST['mccheese']) &&
            isset($_POST['drinks'])
            ) {
            echo (($_POST['bmeal'] * 5) +
                  ($_POST['fries'] * 4) +
                  ($_POST['xtudo'] * 7) +
                  ($_POST['lasagna'] * 11) +
                  ($_POST['mccheese'] * 8) +
                  ($_POST['drinks'] * 2));
              }
          ?>">
        
       
    </td>
</tr>



<tr>
    <td>Total: </td>

    <td>
        <input type="text" name="total" style="width:200px"  
        value="<?php
        if (isset($_POST['bmeal']) &&
            isset($_POST['fries']) &&
            isset($_POST['xtudo']) &&
            isset($_POST['lasagna']) &&
            isset($_POST['mccheese']) &&
            isset($_POST['drinks'])
            ) {
            echo (($_POST['bmeal'] * 5) +
                  ($_POST['fries'] * 4) +
                  ($_POST['xtudo'] * 7) +
                  ($_POST['lasagna'] * 11) +
                  ($_POST['mccheese'] * 8) +
                  ($_POST['drinks'] * 2)) +
                  (
                    (
                      ($_POST['bmeal'] * 5) +
                      ($_POST['fries'] * 4) +
                      ($_POST['xtudo'] * 7) +
                      ($_POST['lasagna'] * 11) +
                      ($_POST['mccheese'] * 8) +
                      ($_POST['drinks'] * 2)
                    ) * 0.12
                  );
              }
          ?>">
        
       
    </td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td align="left" style="width:400px">
    <input type="submit" value="Enviar" name="add" class="bnt">
    </td>
</tr>
</form>


<!--====================================================================================================================-->
<!--============================================CALCULADORA=============================================================-->
<!--====================================================================================================================-->

<td>
<form name ="Calculator" class="style2">
<input name="display" placeholder="0" style = "width:212px; height: 40px; text-align:right; font-size:30; border-radius: 8px; margin: 3px"/>
<br>

<input type="button" value="7" onclick="document.Calculator.display.value +='7'" class='cbtn'/>
<input type="button" value="8" onclick="document.Calculator.display.value +='8'" class='cbtn'/>
<input type="button" value="9" onclick="document.Calculator.display.value +='9'" class='cbtn'/>
<input type="button" value="+" onclick="btnplus()" class="cbtn"/>
<br>

<input type="button" value="4" onclick="document.Calculator.display.value +='4'" class='cbtn'/>
<input type="button" value="5" onclick="document.Calculator.display.value +='5'" class='cbtn'/>
<input type="button" value="6" onclick="document.Calculator.display.value +='6'" class='cbtn'/>
<input type="button" value="-" onclick="btnsub()" class="cbtn"/>
<br>

<input type="button" value="1" onclick="document.Calculator.display.value +='1'" class='cbtn'/>
<input type="button" value="2" onclick="document.Calculator.display.value +='2'" class='cbtn'/>
<input type="button" value="3" onclick="document.Calculator.display.value +='3'" class='cbtn'/>
<input type="button" value="*" onclick="btnmult()" class="cbtn"/>
<br>

<input type="button" value="0" onclick="document.Calculator.display.value +='0'" class='cbtn'/>
<input type="button" value="%" onclick="btnMod()" class="cbtn"/>
<input type="button" value="." onclick="btndot()" class="cbtn"/>
<input type="button" value="/" onclick="btndiv()" class="cbtn"/>
<br>

<input type="button" value="=" onclick="document.Calculator.display.value = eval(document.Calculator.display.value)"
style="width: 101px; height: 40px; font-size:30; border-radius: 8px; margin:3px"/>

<input type="button" value="C" onclick="btnclear()" style="width: 101px; height: 40px; font-size:30; border-radius:8px"/>

</form>
</td>
   </tr>
   </table>
   </td>
</div>

<hr size=5 color = "gray">

<script>
    function btnplus(){
        document.Calculator.display.value +="+";
        document.Calculator.display.style.textAlign="right";
    }

    function btnsub(){
        document.Calculator.display.value +="-";
        document.Calculator.display.style.textAlign="right";
    }

    function btnmult(){
        document.Calculator.display.value +="*";
        document.Calculator.display.style.textAlign="right";
    }

    function btnMod(){
        document.Calculator.display.value +="%";
        document.Calculator.display.style.textAlign="right";
    }

    function btndot(){
        document.Calculator.display.value +=".";
        documento.Calculator.display.style.textAlign="right";
    }

    function btndiv(){
        document.Calculator.display.value +="/";
        documento.Calculator.display.style.textAlign="right";
    }

    function btnclear(){
        document.Calculator.display.value =" ";
        documento.Calculator.display.style.textAlign="right";
    }

</script>




</body>
</html>