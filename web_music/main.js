
const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
        const heading = $('header h2')
        const cdThumb = $('.cd-thumb')
        const audio = $('#audio')
        const cd = $('.cd')
        const playBtn = $('.btn-toggle-play')
        const player =$('.player')
        const progress = $('#progress')
        const nextBtn = $('.btn-next')
        const nextPrev =$('.btn-prev')
        const randomBtn = $('.btn-random')
        const repeat = $('.btn-repeat')
        const playlist =  $('.playlist')
const app = {
    currenIndex: 0 ,
    isPlaying: false,
    isRandom: false,
    isRepeat: false,
    setting: [],
    songs : [
        {
            name: 'Hoa cỏ lau',
            singer: 'Đàm Văn Nam',
            path: './accset/song/hoa-co-lau-official-music-video.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'lời anh chưa thể nói cover Is me :))',
            singer: 'Đàm Văn Nam',
            path: './accset/song/guitarlactn.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'Nợ Ai Đó Lời Xin Lỗi',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - Nợ Ai Đó Lời Xin Lỗi Lofi ver  Bozitt x Freak D.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: '3107-3',
            singer: 'Adele',
            path: './accset/song/y2mate.com - Wn  3107 3  Official Video  ft 267 Nâu Duongg.mp3',
            img: './accset/img/tao.PNG'
        },
       
        {
            name: 'LIỆU GIỜ ',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - 2T  LIỆU GIỜ  WHAT IF   x Venn  Prod KayT   MV.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'SUÝT NỮA THÌ',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - SUÝT NỮA THÌ  ANDIEZ  In The Moonlight Show.mp3',
            img: './accset/img/tao.PNG'
        },
        
        {
            name: 'Anh mơ',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - Anh Mơ  Anh Khang Official Video Clip.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'TÌNH ĐẦU',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - TÌNH ĐẦU  Tăng Duy Tân  Official Music Video.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'id 072019  3107',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - Wn  id 072019  3107 ft 267.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: '3107',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - Wn  3107  Official Video  ft Nâu Duongg.mp3',
            img: './accset/img/tao.PNG'
        },
        {
            name: 'Không Thích',
            singer: 'Đàm Văn Nam',
            path: './accset/song/y2mate.com - Không Thích  Low G  Rap Nhà Làm.mp3',
            img: './accset/img/tao.PNG'
        },
        
    ],
    defineProperties: function(){
        Object.defineProperty(this,'currenSong', {
            get: function(){
              return  this.songs[this.currenIndex]
            }
        })
    },
    render: function(){
        const _this =this
        const html = this.songs.map(function(song, index){
            return `<div class="song ${index === _this.currenIndex ? 'active': '' }" data-index="${index}">
            <div class="thumb" style="background-image: url('${song.img}')">
            </div>
            <div class="body">
              <h3 class="title">${song.name}</h3>
              <p class="author">${song.singer}</p>
            </div>
            <div class="option">
              <i class="fas fa-ellipsis-h"></i>
            </div>
          </div>`
        })
       playlist.innerHTML = html.join('')
    },
    handleEvents: function(){
     //xử lý phog to thu nho Cd
     const _this = this
        const cdWidth = cd.offsetWidth
        const cdThumbAnimate = cdThumb.animate([
            {
                transform: 'rotate(360deg)'
            }
        ],
            {
                duration: 20000,
                iterations: Infinity
            }
        )
        cdThumbAnimate.pause() 
        document.onscroll = function(){
           const scrollTop = document.documentElement.scrollTop
            const NewcdWidth = cdWidth - scrollTop
            cd.style.width = NewcdWidth > 0 ? NewcdWidth + 'px': 0
            cd.style.opacity = NewcdWidth / cdWidth
        }

        // xử lý nút play
        playBtn.onclick= function(){
            if(_this.isPlaying){
                audio.pause()
            }
            else{
                audio.play()
            }
            
            audio.onplay = function(){
                _this.isPlaying = true
                player.classList.add('playing')
                cdThumbAnimate.play()
            }
            // khi pause
            audio.onpause = function(){
                _this.isPlaying = false
                player.classList.remove('playing')
                cdThumbAnimate.pause()
            }
            audio.ontimeupdate = function(){
               const Progress = Math.floor(audio.currentTime / audio.duration * 100 )
               progress.value=Progress
            }
            // xử lý khi tua
            
        }
        progress.onchange = function(e){
            const swichTime = audio.duration / 100 * e.target.value
            audio.currentTime = swichTime
         }
        //xử lý khi tua 
        nextBtn.onclick =function(){
            if(_this.isRandom){
                _this.playRandomSong()
            }
            else{
                _this.nextSong()
            }
            playBtn.click()
            audio.play()
            _this.render()
            _this.scrollToActiveSong()
            
        }
        // xử lý random
        nextPrev.onclick =function(){
            if(_this.isRandom){
                _this.playRandomSong()
            }
            else{
                _this.prevSong()
            }
            playBtn.click()
            audio.play()
            _this.render()
            _this.scrollToActiveSong()
        }
        randomBtn.onclick = function(){
            _this.isRandom = !_this.isRandom
            randomBtn.classList.toggle('active', _this.isRandom)

        }
          // xử lý repeat
          repeat.onclick = function(){
            _this.isRepeat = !_this.isRepeat
            repeat.classList.toggle('active', _this.isRepeat)
        }
        //sử lý khi songend
        audio.onended = function(){
            if(_this.isRepeat){
                audio.play()
            }
            else
            nextBtn.click()
        }
        // lắng nghe sự kiện click vào playlist
        playlist.onclick = function(e){
            const songNode = e.target.closest('.song:not(.active)')
            if(songNode || e.target.closest('.option') ){
                if(songNode){
                   _this.currenIndex = Number(songNode.dataset.index)
                   _this.loadCurrenSong()
                   _this.render()
                   playBtn.click()
                   audio.play()
                }
                if(e.target.closest('.option')){

                }
            }
        }
      
    },
    loadCurrenSong: function(){
        
        heading.textContent = this.currenSong.name
        cdThumb.style.backgroundImage = `url(${this.currenSong.img})`
        audio.src=this.currenSong.path
    },
    nextSong: function(){
        this.currenIndex++
        if(this.currenIndex >= this.songs.length){
            this.currenIndex = 0
        }
        this.loadCurrenSong()
    },
    prevSong: function(){
        this.currenIndex--
        if(this.currenIndex<0){
            this.currenIndex = this.songs.length - 1
        }
        this.loadCurrenSong()
    },
    playRandomSong: function(){
        let newIndex
        do{
            newIndex=Math.floor(Math.random()* this.songs.length)
        }while(newIndex===this.currenIndex){
            this.currenIndex = newIndex
            this.loadCurrenSong()
        }
    },
    scrollToActiveSong : function(){
        setTimeout(function(){
            $('.song.active').scrollIntoView({
                behavior: 'smooth',
                block : 'nearest',
            })
        }, 500)
    },
    start: function(){

        // định nghĩa các thuộc tính cho Object
        this.defineProperties()

        //lắng nghe các sự kiện
        this.handleEvents()

        //tải thông tin bài hát đầu tiên vào app
        this.loadCurrenSong()

        //render giao diện
        this.render()
    }

}
app.start()