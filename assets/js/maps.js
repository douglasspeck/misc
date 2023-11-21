var ContainerElements = ["svg","g"];
var RelevantStyles = {"path":["fill","stroke","stroke-width","fill-opacity","display"]};

function read_Element(ParentNode, OrigData){
    var Children = ParentNode.childNodes;
    var OrigChildDat = OrigData.childNodes;     

    for (var cd = 0; cd < Children.length; cd++){
        var Child = Children[cd];

        var TagName = Child.tagName;
        if (ContainerElements.indexOf(TagName) != -1){
            read_Element(Child, OrigChildDat[cd])
        } else if (TagName in RelevantStyles){
            var StyleDef = window.getComputedStyle(OrigChildDat[cd]);

            var StyleString = "";
            for (var st = 0; st < RelevantStyles[TagName].length; st++){
                StyleString += RelevantStyles[TagName][st] + ":" + StyleDef.getPropertyValue(RelevantStyles[TagName][st]) + "; ";
            }

            Child.setAttribute("style",StyleString);
        }
    }

}

function export_StyledSVG(SVGElem) {

    var oDOM = SVGElem.cloneNode(true)
    read_Element(oDOM, SVGElem)

    var data = new XMLSerializer().serializeToString(oDOM);

    var svg = new Blob([data], { type: "image/svg+xml;charset=utf-8" });
    var url = URL.createObjectURL(svg);

    var link = document.createElement("a");
    link.setAttribute("target","_blank");
    var Text = document.createTextNode("Export");
    link.appendChild(Text);
    link.href=url;
    link.download="nuca.svg";
    link.click();
    link.remove();
}