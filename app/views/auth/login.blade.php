<h1>Login Form</h1>
{{Form::open(array('url'=>'/'))}}
<table>
    <tr>
        <td>Username: </td>
        <td>{{Form::text('username','',array('class'=>'form-control'))}}</td>
    </tr>
    <tr>
        <td>Password: </td>
        <td>{{Form::password('password',array('class'=>'form-control'))}}</td>
    </tr>
    <tr>
        <td></td>
        <td>{{Form::submit('Login')}}</td>
    </tr>
</table>
{{Form::close()}}