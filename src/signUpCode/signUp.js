const db = firebase.database()
var loggedIn = false;
function read(ref){
	let dbRef = db.ref(ref);
	let ret = null
	dbRef.on('value', function(snapshot){
		ret = snapshot.val();
	}, function(error){
		console.log('The read failed: ' + error.code);
	});
	return ret;
}
function createUser(){
	let uName = document.getElementById('suName').value;
	let email = document.getElementById('suEmail').value;
	let password = document.getElementById('suPass').value;
	let thisUser = db.ref('users/' + uName);
	let noAccount = true;
	for (let i = 0; i < users.keys(); i++){
		if (uName == users.keys()[i]){
			noAccount = false;
		}
	}
	if (noAccount){
		thisUser.set({
			email: email,
			password: password
		})
		alert('Your submission was sent');	
	} else {
		alert('This username already exists')
	}
}
function logIn(){
	let uName = document.getElementById('liName').value;
	let password = document.getElementById('liPass').value;
	let dbRef = db.ref('users/' + uName + '/password/');
	let realPass = read(dbRef);
	if (realPass == password){
		alert('Logged in as ' + uName);
		loggedIn == true;
	} else if (realPass == null) {
		alert('Incorrect username or password');
	}
	if (loggedIn == true){
		document.getElementById('headerBtn').innerHTML = uName;
		console.log('changed');
	}
	console.log(realPass);
	console.log(dbRef);
}