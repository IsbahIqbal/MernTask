   var stack=[];
   load();
function load(){
   stack = JSON.parse(localStorage.values);
   queue=JSON.parse(localStorage.queueData);
}
   function insertElementInStack(){
   stack = JSON.parse(localStorage.values);
   var insertedValue=prompt("Enter the value to be inserted in stack");
   stack.push(insertedValue);
   alert("Value inserted!");
   localStorage.values = JSON.stringify(stack);

}
function removeElementFromStack(){
   stack.pop();
   localStorage.values = JSON.stringify(stack);
   stack = JSON.parse(localStorage.values);
}
 var queue=[];

function insertElementInQueue(){
   queue=JSON.parse(localStorage.queueData);
   var queueValues=prompt("Enter the value to be inserted in queue");
   queue.push(queueValues);
   alert("Value inserted!");
   localStorage.queueData=JSON.stringify(queue);


}

function removeElementFromStack(){
   queue.shift();
   localStorage.queueData=JSON.stringify(queue);



}