$( document ).ready(function() {
    $.ajax({
        url: "all-branches",
        success: function(result){
            viewAllBranches(result);
        }
    })
});

function viewAllBranches(branches){
    var html = '<ul>';
    console.log(branches[0].internalId);
    branches.forEach(function(branch){
        html += '<li>' + branch.internalId + ' ' + branch.internalName + '</li>';
    })
    html += '</ul>';

    $('#root').html(html);
}
