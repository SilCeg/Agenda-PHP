<html> 

<body> 
<form action ="validaDados.php" method="POST"> 

<fieldset>

<table> 

    <tr> 
        <td> Informe o nome do evento </td>
        <td> <input size="25" name="nomeEvento">  </td>
    </tr>

    <tr> 
        <td> Informe a data do evento </td>
        <td> <input type="date" name="dataEvento">  </td>
    </tr>

    <tr> 
        <td> Informe o horário de início do evento </td>
        <td> <input type="time" name="horaInicio">  </td>
    </tr>

    <tr> 
        <td> Informe o horário de término do evento </td>
        <td> <input type="time" name="horaFim">  </td>
    </tr>

    <tr> 
        <td> Descrição do evento </td>
        <td> <input size="60" name="descEvento">  </td>
    </tr>

    <tr> 
        <td> Informe o local do evento</td>
        <td> <input size="40" name="localEvento">  </td>
    </tr>

    <tr> 
        <td> Responsável pelo evento </td>
        <td> <input size="25" name="respEvento">  </td>
    </tr>


    <tr> 
        <td colspan=2> <input type="SUBMIT" value="Cadastrar"> </td>
    </tr>


</table>

</form>
</body>




</html>