   document.getElementById('frmSearch').onsubmit = function() {
        window.location = 'http://www.google.com/search?q= ' + document.getElementById('txtSearch').value;
        return false;
    }