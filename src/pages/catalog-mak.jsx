import Library from '@/sections/reused/Library'
import Open from '@/sections/reused/Open'
import World from '@/sections/reused/World'
import Catalog from '@/sections/single/catalog-mak/Catalog'
import Offer from '@/sections/single/catalog-mak/Offer'

export const metadata = {
  title: 'Catalog TARO',
}

export default () => {
  return (
    <>
      <Offer />
      <Catalog />
      <Open />
      <World />
      <Library />
    </>
  )
}
