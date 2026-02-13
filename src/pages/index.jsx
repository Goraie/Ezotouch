import Library from '@/sections/reused/Library'
import Space from '@/sections/reused/Space'
import World from '@/sections/reused/World'
import Day from '@/sections/single/homepage/Day'
import Mak from '@/sections/single/homepage/Mak'
import MakCards from '@/sections/single/homepage/MakCards'
import MakRead from '@/sections/single/homepage/MakRead'
import Offer from '@/sections/single/homepage/Offer'
import Popular from '@/sections/single/homepage/Popular'
import Taro from '@/sections/single/homepage/Taro'
import TaroCards from '@/sections/single/homepage/TaroCards'
import TaroRead from '@/sections/single/homepage/TaroRead'

export const metadata = {
  title: 'Home',
}

export default () => {
  return (
    <>
      <Offer />
      <Taro />
      <TaroRead />
      <TaroCards />
      <Mak />
      <MakRead />
      <MakCards />
      <Day />
      <Popular />
      <Space />
      <World />
      <Library />
    </>
  )
}
