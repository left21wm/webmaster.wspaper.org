---
id: 18
title: 구글과 맞먹는 속도, 레프트21 인덱스화면
date: 2009-03-19T03:39:20+00:00
author: 노동자 연대 웹마스터
layout: post
guid: https://webmaster.wspaper.org/?p=18
permalink: /archives/18
tistory_id:
  - 6
categories:
  - 개발 이야기
tags:
  - webslug
  - WebWait
  - 구글
  - 노동자 연대
  - 로딩속도
  - 속도
  - 웹접근성
---
지난번에는 <a href="https://webmaster.wspaper.org/webmaster/5" target="_blank" class="broken_link">‘속도를 강조한 레프트21 홈페이지’라는 글</a>을 썼죠. 그 글에선 이 홈페이지를 어떤 철학으로 디자인했는지 말씀드렸습니다. 이번에는 자랑을 좀 하려고 글을 씁니다. ^^

## 구글과 맞먹는 속도로 빨리진 인덱스 화면

지난번 글에서 이렇게 말했습니다.

> 다 만들어놓고 보니 인덱스 화면(첫화면)이 느리네요. 이건 DataBase에서 기사들을 긁어오느라 시간이 걸리는 것일 텐데요, 이것도 조금만 기술을 익히면 더 빠르게 만들 수 있을 것 같습니다. …
> 
> 생각해 보세요. left21.com을 입력하자마자 0.1초도 안 돼서 화면이 뜨는 상황을!

약속대로 이걸 구현했습니다. 체감하실는지 모르겠지만, 현재 레프트21의 인덱스화면은 다른 어떤 홈페이지보다도 빠른 편입니다.(빠릅니다! 하고 단정하진 못하겠군요 ㅎㅎ;;)

## 웹페이지 로딩 속도 측정 사이트

제가 또 이런 건 수치화해 비교하는 것을 좋아합니다. 그래서 웹페이지 로딩 속도 측정 사이트로 검색을 해봤습니다. 그랬더니 두 개의 사이트를 찾을 수 있었습니다.

<a href="http://webwait.com" target="_blank" class="broken_link">http://webwait.com</a>

<a href="http://www.webslug.info" target="_blank">http://www.webslug.info</a>

위의 두 사이트에서 다른 경쟁(?!) 사이트들과 속도를 비교한 결과는 다음과 같습니다.

모든 캐시, 임시 인터넷 파일을 비운 상태가 초기조건이었습니다. 그리고 여기 나오는 초수는 모든 화면이 다 로딩될 때까지입니다. 보통은 70%만 떠도 사이트 이용을 시작합니다. 위의 조건을 말씀드리는 이유는 체감속도가 여기 나오는 초수보다 더 빠르다는 것을 알려드리기 위한 것입니다.(한 번 들어간 곳은 컴퓨터가 사이트를 하드에 저장하기 때문에 다시 들어갈 때 훨씬 빨리 뜹니다. 이 비교 사이트에서 재는 것도 마찬가지고요. 그래서 시험삼아 재보시는 분들은 반드시 임시 인터넷파일과 캐시를 모두 지우고 재기 바랍니다.)

## webwait.com 비교 결과

*잴 때마다 0.1초 내외의 차이는 있습니다. 대충 쟀습니다.ㅋ

<p style="text-align: center;">
  <table style="margin: 0 auto;">
    <tr>
      <td>
        <strong style="color: red;">left21.com</strong>
      </td>
      
      <td style="width: 50px;">
        <strong style="color: red;">3.53초</strong>
      </td>
      
      <td>
        hani.co.kr
      </td>
      
      <td>
        12.05초
      </td>
    </tr>
    
    <tr>
      <td>
        chosun.com
      </td>
      
      <td>
        9.23초
      </td>
      
      <td>
        ohmynews.com
      </td>
      
      <td>
        7.98초
      </td>
    </tr>
    
    <tr>
      <td>
        pressian.com
      </td>
      
      <td>
        9.95초
      </td>
      
      <td>
        vop.org
      </td>
      
      <td>
        22.66초
      </td>
    </tr>
    
    <tr>
      <td>
        redian.org
      </td>
      
      <td>
        10.64초
      </td>
      
      <td>
        newscham.net
      </td>
      
      <td>
        4.45초
      </td>
    </tr>
    
    <tr>
      <td>
        naver.com
      </td>
      
      <td>
        5.86초
      </td>
      
      <td>
        <strong style="color: red;">daum.net</strong>
      </td>
      
      <td>
        <strong style="color: red;">3.64초</strong>
      </td>
    </tr>
    
    <tr>
      <td>
        <strong style="color: red;">google.com</strong>
      </td>
      
      <td>
        <strong style="color: red;">4.27초</strong>
      </td>
    </tr>
  </table>
  
  <p style="text-align: center;">
    <img src="https://webmaster.wspaper.org/wp-content/uploads/1/cfile23.uf.151DD8504D0846EE26919D.jpg" width="483" height="333" alt="각 사이트 로딩 속도 비교 그래프, 레프트21이 가장 빠르다" title="각 사이트 로딩 속도 비교 그래프, 레프트21이 가장 빠르다" />
  </p>
  
  <p>
    위 그래프는 그래프 길이가 짧을수록 빠른 것입니다. 레프트21이 가장 짧군요 ^^
  </p>
  
  <p>
    어쩐일인지 구글보다 다음이 빠르게 나오네요.ㅋ 지난 번에 빠른 컴퓨터에서 쟀을 때는 구글과 레프트21만 1초대를 끊었거든요. 아, 이거 잴 때는 컴퓨터 사양도 영향을 미치는 것 같은데, 지금 잰 수치는 꽤 후진 컴퓨터에서 인터넷 익스플로러로 잰 속도입니다. 가장 느릴법하죠. ^^
  </p>
  
  <h2>
    webslug.info 비교 결과
  </h2>
  
  <p>
    이 사이트는 두 개의 사이트를 입력해 속도를 비교해서 승자를 가려줍니다. 너무 많아지면 복잡하니 핵심 경쟁사 세 곳(?!)과만 비교했습니다. 결과는 다음과 같습니다.(새로 비교할 때마다 임시 인터넷 파일과 캐시 등 모든 다운로드 자료를 삭제한 후 비교했습니다. 인터넷 환경, 컴퓨터 사양은 어제 잰 곳보다 훨씬 좋습니다.)
  </p>
  
  <table>
    <tr>
      <th>
        left21.com
      </th>
      
      <th>
        경쟁사(?!)
      </th>
      
      <th>
        속도
      </th>
    </tr>
    
    <tr>
      <td>
        <strong style="color: red;">1.15</strong>
      </td>
      
      <td>
        한겨레 :
      </td>
      
      <td>
        5.63
      </td>
    </tr>
    
    <tr>
      <td>
        <strong style="color: red;">0.93</strong>
      </td>
      
      <td>
        조선 :
      </td>
      
      <td>
        9.64
      </td>
    </tr>
    
    <tr>
      <td>
        <strong style="color: red;">1.20</strong>
      </td>
      
      <td>
        다음 :
      </td>
      
      <td>
        2.10
      </td>
    </tr>
    
    <tr>
      <td>
        <strong style="color: red;">0.93</strong>
      </td>
      
      <td>
        구글 :
      </td>
      
      <td>
        1.26
      </td>
    </tr>
  </table>
  
  <p>
    다음 그림은 비교한 결과를 캡쳐한 것입니다.
  </p>
  
  <p style="text-align: center;">
    <img src="https://webmaster.wspaper.org/wp-content/uploads/1/cfile23.uf.19025A564D0846EE2C2A7D.jpg" width="540" height="728" alt="레프트21 인덱스와 한겨레, 조선일보, 다음, 구글의 로딩 속도를 비교한 것. 레프트21이 모두 이겼다." title="" />
  </p>
  
  <p>
    와우~! 이번에도 구글보다 빠르군요. ^^ 앞선 승자인 다음에 비해서도 75% 빠릅니다.
  </p>
  
  <h2>
    웹과 속도
  </h2>
  
  <p>
    웹에서 속도는 접근성과 연관있다고 생각합니다. 웹 접근성이 하드웨어의 성능여하에 따라 큰 폭으로 차이가 난다면 그건 평등하지 않은 웹사이트겠죠. (물론 웹의 평등에는 그 밖의 여러 요소가 더 중요하지만요) 사양이 안 좋은 컴퓨터에서도 쾌적하게 즐길 수 있는 웹사이트를 만드는 것이 오늘날 한국 웹 환경에서 아주 중요한 요소 중 하나가 됐다고 생각합니다.
  </p>
  
  <p>
    정부가 IT 기반시설(초고속 인터넷 선)에는 엄청난 투자를 했지만, 아직도 많은 사람들이 저사양 컴퓨터를 사용합니다.(레프트21에 들어오시는 분들 중 30% 정도가 여전히 1024*768 바탕화면을 사용하는 것으로 보아 저사양 컴퓨터는 그보다 조금 더 많겠죠.) 그런 사람들이 집에서 쾌적하게 즐길 수 있는 웹사이트가 되었으면 좋겠다고 생각했습니다.
  </p>
  
  <p>
    물론, 지금 빨라진 것은 인덱스 화면<strong>만</strong>입니다. 자료실은 너무 느려요;; 하지만 <strong>가장 중요한 인덱스와 기사보기 화면이 다른 어떤 사이트보다 빠르다</strong>고 자부합니다. (심지어 구글보다 빠를 때도 있다는 사실!)
  </p>
  
  <p>
    앞으로도 접근성이 높은 웹사이트를 만들기 위해 노력하는 웹마스터가 되겠습니다. 기술 수준도 더 높여야겠죠. ^^ 지금 자료실은 어떻게 해야 속도를 높일 수 있을지 떠오르질 않거든요;; 그럼 이만 ^^
  </p>
  
  <p>
    덧) 개발자분들을 위해 구현방법을 간단히 얘기하면 다음과 같습니다. index의 html을 file()함수로 읽어서 통째로 DB에 저장한다. 그리고 저장한 내용을 읽어온다. 이렇게 하면 DB를 여러 번 읽던 것이 한 번으로 줄어들기 때문에 빨라진다. 구체적인 방법은 PHP스쿨에 제가 올려 놓은 다음 글을 참고하세요. 댓글 중에 해법이 있습니다.
  </p>
  
  <p>
    <a href="http://phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_html&#038;wr_id=145683&#038;page=&#038;sfl=mb_id||subject&#038;stx=mytory&#038;spt=&#038;page=&#038;cwin=#c_146530" target="_blank" title="바로 가기">php 스쿨에 쓴 html 소스를 읽어들인 후 저장하는 함수 해결방법</a>
  </p>