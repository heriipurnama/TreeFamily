//comment
var maintree;
function initialize() {
    var canvas = document.getElementById("canvas"),
        context = canvas.getContext("2d"),
        tree = TREE.create("Budi"),
        nodes = TREE.getNodeList(tree),
        currNode = tree,
        add_child_button = document.getElementById("add_child"),
        remove_node = document.getElementById("remove_node"),
        zoom_in = document.getElementById("zoom_in"),
        zoom_out = document.getElementById("zoom_out");

    canvas.addEventListener("click", function (event) {
        var x = event.pageX - canvas.offsetLeft,
            y = event.pageY - canvas.offsetTop;
        for (var i = 0; i < nodes.length; i++) {
            if (x > nodes[i].xPos && y > nodes[i].yPos && x < nodes[i].xPos + nodes[i].width && y < nodes[i].yPos + nodes[i].height) {
                currNode.selected(false);
                nodes[i].selected(true);
                currNode = nodes[i];
                TREE.clear(context);
                TREE.draw(context, tree);
                updatePage(currNode);
                break;
            }
        }
    }, false);

    canvas.addEventListener("mousemove", function (event) {
        var x = event.pageX - canvas.offsetLeft,
            y = event.pageY - canvas.offsetTop;
        for (var i = 0; i < nodes.length; i++) {
            if (x > nodes[i].xPos && y > nodes[i].yPos && x < nodes[i].xPos + nodes[i].width && y < nodes[i].yPos + nodes[i].height) {
                canvas.style.cursor = "pointer";
                break;
            }
            else {
                canvas.style.cursor = "auto";
            }
        }
    }, false);
   
    context.canvas.width = document.getElementById("main").offsetWidth;
    context.canvas.height = document.getElementById("main").offsetHeight;
    populateDummyData(tree);
    nodes = TREE.getNodeList(tree);
    TREE.draw(context, tree);
    maintree = tree;
}

function updatePage(tree) {
    var info_panel = document.getElementById("information_panel");
    var header = document.getElementById("header");
    header.innerHTML = "Budi Family";
    var info_panel_html = "<ul>";
    info_panel_html += "";
    info_panel_html += "";
    info_panel_html += "</ul>";
    info_panel.innerHTML = info_panel_html;
}

function populateDummyData(tree) {
    tree.selected(true);
    updatePage(tree);
    tree.addChild(TREE.create("Dedi"));
    tree.addChild(TREE.create("Dodi"));
    tree.addChild(TREE.create("Dede"));
    tree.addChild(TREE.create("Dewi"));

    tree.getChildAt(0).addChild(TREE.create("Feri"));
    tree.getChildAt(0).addChild(TREE.create("Farah"));
    tree.getChildAt(1).addChild(TREE.create("Gugus"));
    tree.getChildAt(1).addChild(TREE.create("Gandi"));
    tree.getChildAt(2).addChild(TREE.create("Hani"));
    tree.getChildAt(2).addChild(TREE.create("Hana"));
    
}