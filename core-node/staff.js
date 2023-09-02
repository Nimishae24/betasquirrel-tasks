const getStaffs = (input, callback) =>{
   
    const staffs = [
        
           { name:'alan',email:'alan@gmail.com'},
           {name:'shakeer',email:'shakeer@gmail.com'},
           {name:'aslam',email:'aslam@gmail.com'},
        
    ];
    callback(200, {message:'',data:staffs });
};
module.exports = getStaffs;