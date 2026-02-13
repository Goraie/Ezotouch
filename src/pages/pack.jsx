import Library from '@/sections/reused/Library'
import World from '@/sections/reused/World'
import Popular from '@/sections/single/homepage/Popular'
import Article from '@/sections/single/pack/Article/Article'
import Communicate from '@/sections/single/pack/Communicate'
import First from '@/sections/single/pack/First'

export const metadata = {
  title: 'Catalog TARO',
}

export default () => {
  return (
    <>
      <First />
      <Article />
      <Communicate />
      <Popular />
      <World />
      <Library />
    </>
  )
}
