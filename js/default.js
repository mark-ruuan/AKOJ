$(document).ready(function(){
    var code = $(".codemirror-textarea")[0];
    var editor = CodeMirror.fromTextArea(code, {
        lineNumbers : true,
        value : "Write you code here",
        theme : "rubyblue"
    });
    editor.setSize("1200", "350");
});