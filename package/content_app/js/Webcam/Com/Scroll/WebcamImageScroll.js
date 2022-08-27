import ServiceRequestScrollDiv from "../../../../framework/Com/Data/Scroll/ServiceRequestScrollDiv.js";
import H1Container from "../../../../html/Title/H1.js";
import HrContainer from "../../../../html/Layout/HrContainer.js";
import SmallContainer from "../../../../html/Formatting/SmallContainer.js";
import BootstrapImage from "../../../../framework/Bootstrap/Image/BootstrapImage.js";

export default class WebcamImageScroll extends ServiceRequestScrollDiv {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "webcam-list";

    }


    onDataRow(dataRow) {

        let h1 = new H1Container(this);
        h1.text = dataRow.webcam;

        let small = new SmallContainer(this);
        small.text = dataRow.geo_text;

        let img = new BootstrapImage(this);
        img.src = dataRow.image_url;

        new HrContainer(this);

    }

}