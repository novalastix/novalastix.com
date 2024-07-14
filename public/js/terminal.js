const terminalID = "#terminal";
const inputID = "#input";
const promptID = "#prompt";
const outputID = "#output";
const formID = "#form";


$(terminalID).on( "click", function(e) {
    if(e.target.classList.contains('output-line')) return;

    $(inputID).focus();
});

$(formID).on('submit', function (e) {
    e.preventDefault();
    submit();
});

async function boot()
{
    clear();
    const response = await handshake();
    output(response.response);
    enableInput(response.prompt);
}

function clear()
{
    $(outputID).empty();
    $(inputID).val("");
    $(promptID).empty();
}

async function handshake()
{
    const response = await fetch('/api/terminal/handshake');
    return await response.json();
}

function output(messages)
{
    messages.forEach(msg => {
        outputLine(msg);
    });
}

function outputLine(message)
{
    /*const newline = document.createElement('div');
    newline.classList.add('output-line');
    newline.insertAdjacentText("beforeend", message);
    terminal.output.insertAdjacentHTML("beforeend",newline.outerHTML);
    $("#terminal").scrollTop($("#terminal").prop("scrollHeight"));*/

    const newline = $("<div>", {"class": "output-line"});
    newline.text(message);
    $(outputID).append(newline);
    $(terminalID).scrollTop($(terminalID).prop("scrollHeight"));
    $("html").scrollTop($("html").prop("scrollHeight"));
}

function enableInput(prompt)
{
    outputLine("\xa0");
    $(promptID).text(prompt);
    $(inputID).prop('disabled', false);
    $(inputID).focus();
}

function disableInput()
{
    $(promptID).empty();
    $(inputID).prop('disabled', true);
}

async function submit()
{
    const command = $(inputID).val();
    $(inputID).val("");
    outputLine($(promptID).text() + command);
    if(command.trim())
    {
        disableInput();
        const response = await send(command.trim());
        output(response.response);
        enableInput(response.prompt);
    }
}

async function send(command)
{
    const response = await fetch('/api/terminal/c/'+command);
    return await response.json();
}

boot();