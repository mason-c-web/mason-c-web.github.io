import { Link } from "../Link";

export function Content() {
  return (
    <>
      <p className="py-6">
        Working in a makerspace taught me I really like making educational
        videos. I currently produce a short form form series about Seattle
        History and community spaces called{" "}
        <Link
          href="https://www.youtube.com/channel/UCsNpIT9GFANGkl-Ke0c_tgA/"
          title="Seattle For You"
        />
        , and long form series about tech called{" "}
        <Link
          href="https://www.youtube.com/channel/UC9nuH-1XxaFYE0N59YJNfXg"
          title="Coding For Cuties"
        />
        !
        <br />
        <br />
        I've also produced videos for other brands (mostly non profits) like
        Community Lunch On Captiol Hill, Seattle Dodgeball, and Sakura Con you
        can view in my{" "}
        <Link
          href="https://vimeo.com/clarermason"
          title="Nonprofit Portfolio"
        />
      </p>

      <img
        alt="red dasiy spinning"
        src="https://blob.gifcities.org/gifcities/DROJ2XHWJ7JGVD7CLBGFWUBHNP2HC5HG.gif"
      />
    </>
  );
}
