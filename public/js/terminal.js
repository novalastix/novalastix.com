// const terminalID = "#terminal";
// const inputID = "#input";
// const promptID = "#prompt";
// const outputID = "#output";
// const formID = "#form";

$("#form").on('submit', function (e) {
    e.preventDefault();
    submit();
});
    

function boot()
{
    clear();
    //handshake();
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
    //await output([$(promptID).text() + command],0);

    if(command.trim())
    {
        const encodeCommand = btoa(command).replace(/\+/g, '-').replace(/\//g, '_');

        console.log(encodeCommand);
        
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

function output(message)
{
    const prompt = $("<div>", {"class": "output-line"});
    prompt.append(message);
    $("#terminal-output").append(prompt);
    $("#terminal-output").scrollTop($("#terminal-output").prop("scrollHeight"));
}

async function send(command){
    const response = await fetch('/api/terminal/c/'+command);
    const message = await response.json();
    
    message.response.forEach(msg => {
        output(msg);
    });
    output("\xa0");
    prompt();
    enableInput();
}

boot();