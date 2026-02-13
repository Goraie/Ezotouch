import appleTouchIcon from '@/assets/favicons/apple-touch-icon.png'
import favicon16 from '@/assets/favicons/favicon-16x16.png'
import favicon32 from '@/assets/favicons/favicon-32x32.png'
import manifest from '@/assets/favicons/site.webmanifest'
import Content from '@/layouts/Content'
import Footer from '@/layouts/Footer'
import Header from '@/layouts/Header'
import '@/styles'
import { Head } from 'minista'

export default (props) => {
  const { children, title, url } = props

  return (
    <>
      <Head htmlAttributes={{ lang: 'en' }}>
        <title>Friendly Frontend Starter | {title}</title>
        <script src="/src/main.js" type="module" />
        <link rel="apple-touch-icon" sizes="180x180" href={appleTouchIcon} />
        <link rel="icon" type="image/png" sizes="32x32" href={favicon32} />
        <link rel="icon" type="image/png" sizes="16x16" href={favicon16} />
        <link rel="manifest" href={manifest} />
      </Head>
      <Header url={url} />
      <Content>{children}</Content>
      <Footer />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    </>
  )
}
