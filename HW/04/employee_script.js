// =======================================================================
// ***********************************************************************
// Author : Shivani Kolanu
// Assignment : Homework Assignment 4
// Course : Web Programming
// Assignment Description : 1st Part is using js to display employee salaries.
//                          2nd Part is using js to create a memory game with images.
// Filename : employee_script.js
// ************************************************************************
// ========================================================================


let input = parseInt(prompt("Enter the number of hours for employee 1"));
let hours_of_employees = [];

if(input == -1){
    document.write("You entered -1 for first employee, Please refresh the page and try again!");
}

else {
    while(input > -1){
        hours_of_employees.push(input);
        input = parseInt(prompt("Enter the number of hours for employee "+(hours_of_employees.length+1)));
    }
    
    // console.log(hours_of_employees);
    
    let salaries = [];
    let salary = 0;
    let total_pay = 0;
    for(let i=0; i< hours_of_employees.length; i++){
        if(hours_of_employees[i] > 40 ){
            let extra_hours = hours_of_employees[i] - 40;
            salary = extra_hours*22.5;
            salary = salary + (40*15);
            total_pay += salary;
        } else{
            salary = (hours_of_employees[i]*15);
            total_pay += salary;
        }
        salaries[i] = salary;
    }
    
    // console.log(salaries);
        
    document.write("<table style='border:1px solid black'>");
    document.write("<tr style='border:1px solid black'>");
    document.write("<th style='border:1px solid black'>");
    document.write("Employee Number");
    document.write("</th>");
    document.write("<th style='border:1px solid black'>");
    document.write("Number of Hours Worked");
    document.write("</th>");
    document.write("<th style='border:1px solid black'>");
    document.write("Pay for the week");
    document.write("</th>");
    document.write("</tr>");
    for(let i = 0; i<salaries.length;i++){
    
        document.write("<tr style='border:1px solid black'>");
        document.write("<td style='border:1px solid black'>");
        document.write(i+1);
        document.write("</td>");
        document.write("<td style='border:1px solid black'>");
        document.write(hours_of_employees[i]);
        document.write("</td>");
        document.write("<td style='border:1px solid black'>");
        document.write(salaries[i]);
        document.write("</td>");
        document.write("</tr>");
    
    }
    
    document.write("</table>");
    
    document.write("<h2> Total Pay for all the employees is:"+ total_pay +" </h2>")
    
}

