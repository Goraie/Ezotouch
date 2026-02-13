import Another from '@/sections/single/card/Another/Another'
import Article from '@/sections/single/card/Article/Article'
import First from '@/sections/single/card/First'
import Lovely from '@/sections/single/card/Lovely'

export const metadata = {
  title: 'Catalog TARO',
}

export default () => {
  return (
    <>
      <First />
      <Article />
      <Another />
      <Lovely />
    </>
  )
}
