@extends('appLayout')

@section('taskListContent')
<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <form method="post">
    <input type="text" name="task" id="myInput" placeholder="Title...">
    <input type="submit" value="Add" class="addBtn">
  </form>

</div>

<ul id="myUL">
  <li>Hit the gym <a href="#" class="close">X</a></li>
  <li class="checked">Pay bills</li>
  <li>Meet George <a href="#" class="close">X</a></li>
  <li>Buy eggs <a href="#" class="close">X</a></li>
  <li>Read a book <a href="#" class="close">X</a></li>
  <li>Organize office <a href="#" class="close">X</a></li>
</ul>
@endsection
