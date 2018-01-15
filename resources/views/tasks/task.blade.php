<tbody>

    <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->unit}}</td>
        <td>{{$task->task}}</td>
        <td>{{$task->status}}</td>
        <td>{{$task->date}}</td>
@if(Auth::user())<td><a href="tasks/{{$task->id}}">click</a></td></td>@endif
</tr>

@if(Auth::user())
<tr>
    <td colspan="6">Atbildīgais: {{$task->mainOrg}}
        <br>Palīgi: {{$task->helper}}
        <br>Komentāri:
</tr>
@endif


</tbody>