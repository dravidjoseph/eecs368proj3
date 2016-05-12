//created by Michael Wang
//var taskLimit = 50;
var taskCounter = 1;
function addTask(divName)
{
     /* if(taskCounter == taskLimit)
     {
        alert("You have reached the limit of adding " + taskCounter + " inputs");
     } */
     //else 
     {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Task " + (taskCounter + 1) + " <br><input type='text' name='tasks"+taskCounter+"'>Priority<select name='priority"+taskCounter+"'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select>Date<input type='date' class='textform1' name='date"+taskCounter+"'>";
        document.getElementById(divName).appendChild(newdiv);
        
		taskCounter++;	
		var x = document.getElementById('counter').value = taskCounter-1;
	 }
}
function returnCounter()
{
	return taskCounter;
}
function submitForm()
{
	var task = getElementById(0).getValue();
	alert(task);
}