//Terminal Vars
var debug = false;

const remoteFunctions = 
{
    "clear": function(){
        clear();
    },
    "debug": function(){
        debug = !debug;
    }
}

const flags = 
{
    normal: 0,
    warn: 1
}

$("#form").on('submit', function (e) {
    e.preventDefault();
    submit();
});
    

function boot()
{
    clear();
    enableInput();
    prompt();
}

function clear()
{
    $("#terminal-output").empty();
    $("#input").val("");
    disableInput();
}

function disableInput()
{
    $("#input").val("");
    $("#input").prop('placeholder', "");
    $("#submit").prop('disabled', true);
}

async function enableInput()
{
    $("#input").val("");
    $("#input").prop('placeholder', "Enter Command...");
    $("#submit").prop('disabled', false);
    $("#input").focus();
}

function submit()
{
    const command = $("#input").val();
    $("#input").val("");

    closePrompt(command)

    if(command.trim())
    {
        const encodeCommand = btoa(command).replace(/\+/g, '-').replace(/\//g, '_');
        
        disableInput();

        const response = send(encodeCommand);
    }
    else
    {
        prompt();
    }
}

function prompt()
{
    const prompt = $("<div>", {"class": "output-line","id":"prompt"});
    const user = $("<span>",{"class":"terminal-user"});
    user.text("@guest");
    
    prompt.append(user);
    prompt.append(">");
    $("#terminal-output").append(prompt);
    $("#terminal-output").scrollTop($("#terminal-output").prop("scrollHeight"));
}

function closePrompt(commmand)
{
    $("#prompt").append(commmand);
    $("#prompt").removeAttr('id');
}

function output(message,flag=0)
{
    var messageType = "";
    if (flag == 1) messageType = " warn";

    const prompt = $("<div>", {"class": "output-line "+messageType});
    prompt.append(message);
    $("#terminal-output").append(prompt);
    $("#terminal-output").scrollTop($("#terminal-output").prop("scrollHeight"));
}

async function send(command){
    const response = await fetch('/api/terminal/c/'+command);
    const message = await response.json();

    if(debug){output(JSON.stringify(message),flags.warn);}

    

    if(message.response)
    {
        message.response.forEach(msg => {
            output(msg);
        });
        output("\xa0");
    }

    if(message.function)
    {
        if(remoteFunctions[message.function])
        {
            remoteFunctions[message.function]();
        }
    }
    
    prompt();
    enableInput();
}

boot();