import { PageData } from "./pageData";

export function PageContent(props: { pageData: PageData }) {
  const {
    image,
    titleImage,
    titleDecorator,
    descriptionHTML,
    imageAltText,
    titleDecoratorAltText,
    titleImageAltText,
  } = props.pageData;
  return (
    <div className="main-box">
      <div className={"hero-content flex-col lg:flex-row "}>
        <img
          src={image}
          alt={imageAltText}
          className="object-contain md:object-cover p-8"
        />

        <div>
          <div className="lg:flex md:flex lg:flex-row med:flex-row items-end max-w-sm ">
            <img alt={titleImageAltText} src={titleImage} />
            <img alt={titleDecoratorAltText} src={titleDecorator} />
          </div>

          {descriptionHTML}
        </div>
      </div>
    </div>
  );
}
