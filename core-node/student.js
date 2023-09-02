const getStudents = (input, callback) =>{
   
    const students = [
        
           { name:'nithun',email:'nithun@gmail.com'},
           {name:'nimisha',email:'nimisha@gmail.com'},
           {name:'fasna',email:'fasna@gmail.com'},
        
    ];
    callback(200, {message: '',data:students });
};
module.exports = getStudents;