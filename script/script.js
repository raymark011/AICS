const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}



inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});



var bstudent = document.getElementById('bstudent');
var bfaculty = document.getElementById("bfaculty");
var student = document.getElementById('student');
var faculty = document.getElementById("faculty");

bstudent.onclick = function() {
	faculty.style.display = "none";
	student.style.display = "grid";
}
bfaculty.onclick = function() {
	student.style.display = "none";
	faculty.style.display = "grid";
}