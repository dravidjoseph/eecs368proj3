//created by Michael Wang

var taskCounter = 1;
//this function allows the user to add a new task with all the inputs that the 1st task on the page has.
function addTask(divName)
{
     {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Task " + (taskCounter + 1) + " <br><input type='text' name='tasks"+taskCounter+"'>Priority<select name='priority"+taskCounter+"'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select>Date<input type='date' class='textform1' name='date"+taskCounter+"'>";
        document.getElementById(divName).appendChild(newdiv);
        
		taskCounter++;	
		var x = document.getElementById('counter').value = taskCounter-1;
	 }
}
